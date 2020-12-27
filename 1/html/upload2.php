<?php
session_start();
?>
<head>
    <base target="_parent" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://www.gstatic.com/firebasejs/5.8.4/firebase.js"></script>
</head>
<div class="file-upload__modal" role="section">
    <h1 class="file-upload__modal-title" role="heading">Upload Transcript</h1>
  <p class="file-upload__error" role="alertdialog"></p>
    <ul class="file__list js-file__list" role="list"></ul>

    <form action="upload1.php" method="POST" class="file-upload__form js-dropzone" role="form" enctype="multipart/form-data">
      <input type="hidden" value=<?php echo $_SESSION['email']?> name="email" id="email" >
      <input
        type="file"
             name="file"
        id="file-dropzone"
        class="file__input js-file__input"
        multiple 
      >
      <label
        class="file__input-label"
        for="file-dropzone"
      >Drag file here or <button class="file__input-label-button" role="button">browse</button></label>
       <button type="submit" name = "submit" class = "button file__input-label">SUBMIT</button>
    </form>
  <style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:300,500,700");
* {
    box-sizing: border-box;
}

body {
position:fixed;
top:auto;
left:auto;
}

ul {
    margin: 0;
    padding: 0;
}

.file-upload__modal {
    display: grid;
    width: 350px;
    margin: 50px auto;
    padding: 25px 0;
    border: 1px solid #ccc;
    border-radius: 20px;
    background-color: #fff;
    box-shadow: 0 4px 6px 0 rgba(51, 46, 58, 0.1);
}

.file-upload__modal-title {
    margin-bottom: 30px;
    color: #3d4852;
    font-size: 14px;
    font-weight: bold;
    letter-spacing: 1.3px;
    line-height: 1.5;
    text-align: center;
    text-transform: uppercase;
}

.file-upload__error {
    display: none;
    margin: 0 25px 30px;
    color: #ed655e;
    font-size: 14px;
}

.file__list {
    margin: 0 25px;
}

.file-upload__form {
    display: grid;
    align-content: center;
    justify-content: center;
    width: 300px;
    height: 150px;
    margin: 0 25px;
    transition: all .3s;
    border: 2px dashed rgba(104, 142, 232, 0.3);
    border-radius: 15px;
}

.file-upload__form:hover {
    border: 2px dashed #688ee8;
}

.file__input {
    display: none;
}

.file__input-label {
    width: 150px;
    color: #3d4852;
    font-size: 14px;
    letter-spacing: 1.3px;
    line-height: 1.5;
    text-align: center;
    text-transform: uppercase;
}

.file__input-label-button {
    background-color: #fff;
    font-family: 'Montserrat', sans-serif;
    font-size: 14px;
    letter-spacing: 1.3px;
    line-height: 1.5;
    transition: all .3s;
    color: #688ee8;
    cursor: pointer;
    border: none;
    text-transform: uppercase;
}

.file__input-label-button:hover {
    color: rgba(104, 142, 232, 0.3);
}

.file-details__container {
    display: grid;
    grid-template-columns: 235px 20px;
    padding-left: 15px;
}

.file-output__list-item {
    display: grid;
    grid-template-columns: 1fr min-content;
    align-items: end;
    margin: 0 auto 25px;
    list-style: none;
}

.file-output__list-item-image {
    display: inline;
    width: 30px;
    height: 38px;
    opacity: .4;
}

.file-output__list-item-name {
    margin-bottom: 10px;
    opacity: .4;
    font-size: 13px;
}

.file-output__list-item--is-complete {
    display: flex;
    align-self: center;
    width: 0px;
    height: 10px;
}

.file-output__progress-bar {
    width: 255px;
}

.file-output__progress-bar[value] {
    appearance: none;
    height: 2px;
    column-span: 1 / 3;
}

.file-output__progress-bar[value]::-webkit-progress-bar {
    background-color: rgba(237, 101, 94, 0.2);
}

.progress-bar--in-progress[value]::-webkit-progress-value {
    background-color: #ed655e;
}

.progress-bar--is-finished[value]::-webkit-progress-value {
    transition: all .25s;
    background-color: #6cc08a;
}
.button {
    position: absolute;
    background-color: #add8e6;
    border-radius: 15px;
    height: auto;
    width: 50%;
    top: 85%;
    right: 25%;
    cursor: pointer;
} 
.button:hover {
  transition:0.4s;
      -webkit-filter: brightness(70%);
	-moz-filter: brightness(70%);
	-o-filter: brightness(70%);
	-ms-filter: brightness(70%);
	filter: brightness(70%);
}
  </style>
  <script>
    var config = {
	apiKey: '',
	authDomain: '',
	databaseURL: '',
	projectId: '',
	storageBucket: '',
	messagingSenderId: '',
};
firebase.initializeApp(config);

const init = function() {
	const fileInputElement = document.querySelector('.js-file__input');
	const fileDropZone = document.querySelector('.js-dropzone');
   document.querySelector('.file__input-label-button').addEventListener('click', function(e) {
      e.preventDefault();
      fileInputElement.click();
    })
	fileInputElement.addEventListener('change', function(e) {
		const validatedFiles = fileValidation([...fileInputElement.files]);
		createFileDOMNode(validatedFiles);
	});
	fileDropZone.addEventListener('dragover', function(e) {
		e.preventDefault();
	});
	fileDropZone.addEventListener('drop', function(e) {
		e.preventDefault();
		const unvalidatedFiles = getArrayOfFileData([...e.dataTransfer.items]);
		const validatedFiles = fileValidation(unvalidatedFiles);
		createFileDOMNode(validatedFiles);
	});
};

// Validates each file that it is the format we accept
// Then pushes the validated file to a new array
const fileValidation = function(files) {
	const errMessageOutput = document.querySelector('.file-upload__error');
	const validatedFileArray = [];
	const supportedExts = ['png', 'jpg', 'doc', 'xls', 'pdf', 'ai', 'psd'];
	files.forEach(file => {
		const ext = getFileExtension(file);
		if (supportedExts.indexOf(ext) === -1) {
			let errMessage =
				'Please upload a .doc, .png, .psd, .pdf, .ai, .xls or .jpg file only.';
			errMessageOutput.style.display = 'block';
			errMessageOutput.textContent = errMessage;
			// return '';
		} else {
			errMessageOutput.style.display = 'none';
			validatedFileArray.push(file);
		}
	});
	return validatedFileArray;
};

// Returns an array of the file data
const getArrayOfFileData = function(files) {
	const fileDataArray = [];
	files.forEach(file => {
		if (file.kind === 'file') {
			fileDataArray.push(file.getAsFile());
		}
	});
	return fileDataArray;
};

// Creates list item DOM nodes for each file uploaded
const createFileDOMNode = function(files) {
	const fileList = document.querySelector('.js-file__list');

	files.forEach(file => {
		// Create a DOM element(s) for each file dropped
		const listItemElement = document.createElement('li');
		const fileDetailsContainer = document.createElement('div');
		const fileOutputListItemImage = document.createElement('img');
		const fileOutputListItemName = document.createElement('span');
		const fileOutputListItemSVGIsComplete = document.createElement('img');
		const fileOutputListItemProgressBar = document.createElement('progress');

		// Append elements to the DOM and parent components to the elements
		fileList.appendChild(listItemElement);
		listItemElement.appendChild(fileOutputListItemImage);
		listItemElement.appendChild(fileDetailsContainer);
		fileDetailsContainer.appendChild(fileOutputListItemName);
		fileDetailsContainer.appendChild(fileOutputListItemSVGIsComplete);
		fileDetailsContainer.appendChild(fileOutputListItemProgressBar);

		// Add classs to the create element
		listItemElement.classList.add('file-output__list-item');
		fileDetailsContainer.classList.add('file-details__container');
		fileOutputListItemImage.classList.add('file-output__list-item-image');
		fileOutputListItemSVGIsComplete.classList.add(
			'file-output__list-item--is-complete'
		);
		fileOutputListItemName.classList.add('file-output__list-item-name');
		fileOutputListItemProgressBar.classList.add('file-output__progress-bar');

		//Set aria roles
		listItemElement.setAttribute('role', 'listitem');
		fileOutputListItemImage.setAttribute('role', 'image');

		fileOutputListItemName.textContent = truncateString(file.name, 25);

		const ext = getFileExtension(file);
		setAssociatedSVGWithFileType(ext, fileOutputListItemImage);
		updateDatabase(
			file,
			fileOutputListItemProgressBar,
			fileOutputListItemName,
			fileOutputListItemImage,
			fileOutputListItemSVGIsComplete
		);
	});
};

const updateDatabase = function(
	file,
	progressBarElement,
	fileNameTextElement,
	fileTypeImageElement,
	fileCompletionImageElement
) {
	// Create a storage ref
	const storageRef = firebase.storage().ref('myFiles/' + file.name);
	// Upload a file
	let task = storageRef.put(file);

	// Set progress bar initial and max values
	progressBarElement.value = 0;
	progressBarElement.max = 100;

	// Update progress bar
	task.on(
		'state_changed',
		function progress(snapshot) {
			const percentage =
				(snapshot.bytesTransferred / snapshot.totalBytes) * 100;
			progressBarElement.value = percentage;
			progressBarElement.classList.add('progress-bar--in-progress');
			fileCompletionImageElement.src =
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-close.svg';
		},

		function error(err) {
      console.log('An error has occured!');
    },

		function complete() {
			fileNameTextElement.style.opacity = '1';
			fileTypeImageElement.style.opacity = '1';
			progressBarElement.classList.add('progress-bar--is-finished');
			fileCompletionImageElement.src =
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-check.svg';
		}
	);
};

// Returns the files type extension
const getFileExtension = function(file) {
	return file.name.split('.').pop();
};

// Associates what svg gets matched to what type of file uploaded
const setAssociatedSVGWithFileType = function(ext, nodeElement) {
	switch (ext) {
		case 'jpg':
			nodeElement.setAttribute(
				'src',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-file-jpg.svg'
			);
			break;
		case 'png':
			nodeElement.setAttribute(
				'src',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-file-png.svg'
			);
			break;
		case 'doc':
			nodeElement.setAttribute(
				'src',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-file-doc.svg'
			);
			break;
		case 'ai':
			nodeElement.setAttribute(
				'src',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-file-ai.svg'
			);
			break;
		case 'psd':
			nodeElement.setAttribute(
				'src',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-file-psd.svg'
			);
			break;
		case 'pdf':
			nodeElement.setAttribute(
				'src',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-file-pdf.svg'
			);
			break;
		case 'xls':
			nodeElement.setAttribute(
				'src',
				'https://s3-us-west-2.amazonaws.com/s.cdpn.io/2684911/icon-file-xls.svg'
			);
			break;
		default:
			return '';
	}
};

// Truncates a string if too long
const truncateString = function(str, num) {
  if (str.length != 0){
            var c = document.getElementsByClassName("file-output__progress-bar");
        for (var i=0; i<c.length; i++) {
        c[i].style.width = "0px";}
  }
	if (str.length > num) {
		return str.slice(0, num) + '...';
	} else {
		return str;
	}
};

init();

  </script>