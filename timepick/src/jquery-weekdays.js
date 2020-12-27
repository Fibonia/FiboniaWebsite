$(function($){
    $.fn.weekdays = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='0' style='z-index:1;' class="+options.listClass+">");


        $this.data({
            days: options.days,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if (index == 0){
            var somestr = " weekday-selected weekdays-day";
            var $liElement = $("<li id="+(xy*1000)+" data-day=" + index + " class='"+somestr +"' selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+(xy*1000)+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");   
            }

            $liElement.on('click',function(item){
            var i;
            for (i = 1000; i != 8000; i+= 1000) {
                if (i == index){
                document.getElementById(i).classList.add('weekday-selected');
                }else{
                 document.getElementById(i).classList.remove('weekday-selected');   
                }
            }
            var id = "";
            var zxy = 0;
            for (i = 1; i != 8; i+= 1) {
                if (i == index+1){
                    if (i == 1){
                        id = "weekdaysSelectedValues";
                    }else{
                        zxy = i-1;
                        id = "weekdaysSelectedValues"+zxy;
                    }
                    document.getElementById(id).style.zIndex=1; 
                }else{
                    if (i == 1){
                        id = "weekdaysSelectedValues";
                    }else{
                        zxy = i-1;
                        id = "weekdaysSelectedValues"+zxy;
                    }
                 y = -i;
                 document.getElementById(id).style.zIndex=y;   
                }
            }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 

    };

    $.fn.weekdays1 = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='100' style='z-index:-1;' class="+options.listClass+">");


        $this.data({
            days: options.days1,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if(xy == 49){
            var $liElement = $("<li style = 'background-color:#d11a2a;color:black;' id="+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }

            $liElement.on('click',function(item){
                if (document.getElementById(index+1).classList.contains("disabled")){
                    return;
                }
                 if (index == 48){
                         var i;
                        for (i = 1; i != 49; i++) {
                            document.getElementById(i).classList.remove('weekday-selected');
                            document.getElementById(i).classList.remove('disabled');
                         }
                }else{
                    if (index == 47){
                    if (document.getElementById(47).classList.contains('disabled')){
                    document.getElementById(index).classList.remove('disabled');                        
                    }else{
                    document.getElementById(index).classList.add('disabled');
                    }
                    }else if (index==0){
                    if (document.getElementById(2).classList.contains('disabled')){
                    document.getElementById(index+2).classList.remove('disabled');                        
                    }else{
                    document.getElementById(index+2).classList.add('disabled');
                    }
                    } else{
                    
                    if (document.getElementById(index+1).classList.contains('weekday-selected')){
                    document.getElementById(index).classList.remove('disabled');
                    document.getElementById(index+2).classList.remove('disabled');                        
                    }else{
                    document.getElementById(index).classList.add('disabled');
                    document.getElementById(index+2).classList.add('disabled');
                    }
                    }
                    document.getElementById(49).classList.remove('weekday-selected');
                }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 	

    };
    
    $.fn.weekdays2 = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='200' style='z-index:-2;' class="+options.listClass+">");


        $this.data({
            days: options.days1,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if(xy == 49){
            var $liElement = $("<li style = 'background-color:#d11a2a;color:black;' id="+'a'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+'a'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }

            $liElement.on('click',function(item){
                if (document.getElementById('a'+(index+1)).classList.contains("disabled")){
                    return;
                }
                 if (index == 48){
                         var i;
                        for (i = 1; i != 49; i++) {
                            document.getElementById('a'+i).classList.remove('weekday-selected');
                            document.getElementById('a'+i).classList.remove('disabled');
                         }
                }else{
                    if (index == 47){
                    if (document.getElementById('a'+47).classList.contains('disabled')){
                    document.getElementById('a'+index).classList.remove('disabled');                        
                    }else{
                    document.getElementById('a'+index).classList.add('disabled');
                    }
                    }else if (index==0){
                    if (document.getElementById('a'+2).classList.contains('disabled')){
                    document.getElementById('a'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('a'+(index+2)).classList.add('disabled');
                    }
                    } else{
                    if (document.getElementById('a'+(index+1)).classList.contains('weekday-selected')){
                    document.getElementById('a'+index).classList.remove('disabled');
                    document.getElementById('a'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('a'+index).classList.add('disabled');
                    document.getElementById('a'+(index+2)).classList.add('disabled');
                    }
                    }
                    document.getElementById('a'+49).classList.remove('weekday-selected');
                }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 	

    };
    
    $.fn.weekdays3 = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='300' style='z-index:-3;' class="+options.listClass+">");


        $this.data({
            days: options.days1,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if(xy == 49){
            var $liElement = $("<li style = 'background-color:#d11a2a;color:black;' id="+'b'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+'b'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }

            $liElement.on('click',function(item){
                if (document.getElementById('b'+(index+1)).classList.contains("disabled")){
                    return;
                }
                 if (index == 48){
                         var i;
                        for (i = 1; i != 49; i++) {
                            document.getElementById('b'+i).classList.remove('weekday-selected');
                            document.getElementById('b'+i).classList.remove('disabled');
                         }
                }else{
                    if (index == 47){
                    if (document.getElementById('b'+47).classList.contains('disabled')){
                    document.getElementById('b'+index).classList.remove('disabled');                        
                    }else{
                    document.getElementById('b'+index).classList.add('disabled');
                    }
                    }else if (index==0){
                    if (document.getElementById('b'+2).classList.contains('disabled')){
                    document.getElementById('b'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('b'+(index+2)).classList.add('disabled');
                    }
                    } else{
                    if (document.getElementById('b'+(index+1)).classList.contains('weekday-selected')){
                    document.getElementById('b'+index).classList.remove('disabled');
                    document.getElementById('b'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('b'+index).classList.add('disabled');
                    document.getElementById('b'+(index+2)).classList.add('disabled');
                    }
                    }
                    document.getElementById('b'+49).classList.remove('weekday-selected');
                }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 	

    };
    
    $.fn.weekdays4 = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='400' style='z-index:-4;' class="+options.listClass+">");


        $this.data({
            days: options.days1,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if(xy == 49){
            var $liElement = $("<li style = 'background-color:#d11a2a;color:black;' id="+'c'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+'c'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }

            $liElement.on('click',function(item){
                if (document.getElementById('c'+(index+1)).classList.contains("disabled")){
                    return;
                }
                 if (index == 48){
                         var i;
                        for (i = 1; i != 49; i++) {
                            document.getElementById('c'+i).classList.remove('weekday-selected');
                            document.getElementById('c'+i).classList.remove('disabled');
                         }
                }else{
                    if (index == 47){
                    if (document.getElementById('c'+47).classList.contains('disabled')){
                    document.getElementById('c'+index).classList.remove('disabled');                        
                    }else{
                    document.getElementById('c'+index).classList.add('disabled');
                    }
                    }else if (index==0){
                    if (document.getElementById('c'+2).classList.contains('disabled')){
                    document.getElementById('c'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('c'+(index+2)).classList.add('disabled');
                    }
                    } else{
                    if (document.getElementById('c'+(index+1)).classList.contains('weekday-selected')){
                    document.getElementById('c'+index).classList.remove('disabled');
                    document.getElementById('c'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('c'+index).classList.add('disabled');
                    document.getElementById('c'+(index+2)).classList.add('disabled');
                    }
                    }
                    document.getElementById('c'+49).classList.remove('weekday-selected');
                }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 	

    };
    
    $.fn.weekdays5 = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='500' style='z-index:-5;' class="+options.listClass+">");


        $this.data({
            days: options.days1,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if(xy == 49){
            var $liElement = $("<li style = 'background-color:#d11a2a;color:black;' id="+'d'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+'d'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }

            $liElement.on('click',function(item){
                if (document.getElementById('d'+(index+1)).classList.contains("disabled")){
                    return;
                }
                 if (index == 48){
                         var i;
                        for (i = 1; i != 49; i++) {
                            document.getElementById('d'+i).classList.remove('weekday-selected');
                            document.getElementById('d'+i).classList.remove('disabled');
                         }
                }else{
                    if (index == 47){
                    if (document.getElementById('d'+47).classList.contains('disabled')){
                    document.getElementById('d'+index).classList.remove('disabled');                        
                    }else{
                    document.getElementById('d'+index).classList.add('disabled');
                    }
                    }else if (index==0){
                    if (document.getElementById('d'+2).classList.contains('disabled')){
                    document.getElementById('d'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('d'+(index+2)).classList.add('disabled');
                    }
                    } else{
                    if (document.getElementById('d'+(index+1)).classList.contains('weekday-selected')){
                    document.getElementById('d'+index).classList.remove('disabled');
                    document.getElementById('d'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('d'+index).classList.add('disabled');
                    document.getElementById('d'+(index+2)).classList.add('disabled');
                    }
                    }
                    document.getElementById('d'+49).classList.remove('weekday-selected');
                }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 	

    };

    $.fn.weekdays6 = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='600' style='z-index:-6;' class="+options.listClass+">");


        $this.data({
            days: options.days1,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if(xy == 49){
            var $liElement = $("<li style = 'background-color:#d11a2a;color:black;' id="+'e'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+'e'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }

            $liElement.on('click',function(item){
                if (document.getElementById('e'+(index+1)).classList.contains("disabled")){
                    return;
                }
                 if (index == 48){
                         var i;
                        for (i = 1; i != 49; i++) {
                            document.getElementById('e'+i).classList.remove('weekday-selected');
                            document.getElementById('e'+i).classList.remove('disabled');
                         }
                }else{
                    if (index == 47){
                    if (document.getElementById('e'+47).classList.contains('disabled')){
                    document.getElementById('e'+index).classList.remove('disabled');                        
                    }else{
                    document.getElementById('e'+index).classList.add('disabled');
                    }
                    }else if (index==0){
                    if (document.getElementById('e'+2).classList.contains('disabled')){
                    document.getElementById('e'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('e'+(index+2)).classList.add('disabled');
                    }
                    } else{
                    if (document.getElementById('e'+(index+1)).classList.contains('weekday-selected')){
                    document.getElementById('e'+index).classList.remove('disabled');
                    document.getElementById('e'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('e'+index).classList.add('disabled');
                    document.getElementById('e'+(index+2)).classList.add('disabled');
                    }
                    }
                    document.getElementById('e'+49).classList.remove('weekday-selected');
                }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 	

    };
    
    $.fn.weekdays7 = function(options){
        options = consolideOptions(options);

        var $this =  $(this);
        var $html = $("<ul id='700' style='z-index:-7;' class="+options.listClass+">");


        $this.data({
            days: options.days1,
            selectedIndexes: options.selectedIndexes
        });

        $($this.data().days).each(function(index, item){
            var selected = $this.data().selectedIndexes.includes(index);
            var lst = $this.data();
            var xy = index+1;
            if(xy == 49){
            var $liElement = $("<li style = 'background-color:#d11a2a;color:black;' id="+'f'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }else{
            var $liElement = $("<li id="+'f'+xy+" data-day=" + index + " class=" + options.itemClass + " selected=" + selected + ">" + item + "</li>");
            }

            $liElement.on('click',function(item){
                if (document.getElementById('f'+(index+1)).classList.contains("disabled")){
                    return;
                }
                 if (index == 48){
                         var i;
                        for (i = 1; i != 49; i++) {
                            document.getElementById('f'+i).classList.remove('weekday-selected');
                            document.getElementById('f'+i).classList.remove('disabled');
                         }
                }else{
                    if (index == 47){
                    if (document.getElementById('f'+47).classList.contains('disabled')){
                    document.getElementById('f'+index).classList.remove('disabled');                        
                    }else{
                    document.getElementById('f'+index).classList.add('disabled');
                    }
                    }else if (index==0){
                    if (document.getElementById('f'+2).classList.contains('disabled')){
                    document.getElementById('f'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('f'+(index+2)).classList.add('disabled');
                    }
                    } else{
                    if (document.getElementById('f'+(index+1)).classList.contains('weekday-selected')){
                    document.getElementById('f'+index).classList.remove('disabled');
                    document.getElementById('f'+(index+2)).classList.remove('disabled');                        
                    }else{
                    document.getElementById('f'+index).classList.add('disabled');
                    document.getElementById('f'+(index+2)).classList.add('disabled');
                    }
                    }
                    document.getElementById('f'+49).classList.remove('weekday-selected');
                }
                if(options.singleSelect)
                   singleSelectMode(options, $html);

                var $li = $(item.target); 
                toggleSelection($li, options);
            });

            if(selected)
                $liElement.toggleClass(options.itemSelectedClass);

            $liElement.prop('selected', selected);

            $html.append($liElement);
        });

        $this.append($html); 	

    };

    $.fn.weekdays.days = ["Sun","Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]; 
    $.fn.weekdays1.days = ["00:00","00:30", "01:00", "01:30", "02:00", "02:30", "03:00","03:30","04:00", "04:30", "05:00", "05:30", "06:00", "06:30","07:00","07:30", "08:00", "08:30", "09:00", "09:30", "10:00","10:30","11:00", "11:30", "12:00","12:30","13:00", "13:30", "14:00", "14:30", "15:00", "15:30","16:00","16:30", "17:00", "17:30", "18:00", "18:30", "19:00","19:30","20:00", "20:30", "21:00", "21:30", "22:00", "22:30","23:00","23:30","None"]; 

    $.fn.selectedIndexes = function(){
        return $(this).find('li')
            .filter(function(index,a){
                return a.selected; 
            })
            .map(function(index,item){
                return $(item).attr("data-day"); 
            });
    };

    $.fn.selectedDays = function(){
        var $this = $(this);

        return $(this).find('li')
            .filter(function(index,a){ 
                return a.selected; 
            })
            .map(function(index,item){ 
                return $this.data().days[$(item).attr("data-day")]; 
            });
    }; 

    function consolideOptions(options){
        options = options ? options : {};
        options.days = options.days ? options.days : $.fn.weekdays.days;
        options.days1 = options.days1 ? options.days1 : $.fn.weekdays1.days;
        options.selectedIndexes = options.selectedIndexes ? options.selectedIndexes : [];
        options.listClass = options.listClass ? options.listClass : 'weekdays-list';
        options.listClass1 = options.listClass1 ? options.listClass1 : 'weekdays-list';
        options.listClass2 = options.listClass2 ? options.listClass2 : 'weekdays-list';
        options.listClass3 = options.listClass3 ? options.listClass3 : 'weekdays-list';
        options.listClass4 = options.listClass4 ? options.listClass4 : 'weekdays-list';
        options.listClass5 = options.listClass5 ? options.listClass5 : 'weekdays-list';
        options.listClass6 = options.listClass6 ? options.listClass6 : 'weekdays-list';
        options.itemClass = options.itemClass ? options.itemClass : 'weekdays-day';
        options.itemSelectedClass = options.itemSelectedClass ? options.itemSelectedClass : 'weekday-selected';
        options.singleSelect = options.singleSelect ? options.singleSelect : false;

        return options;
    }

    function singleSelectMode(options, $html){
         $html.find('li')
              .each(function(index,item){ 
                       var $li = $(item);

                       $li.prop('selected', false);
                       $li.removeClass(options.itemSelectedClass);
                   });
    }

    function toggleSelection($li, options){
         var selected = !$li.prop('selected')

         $li.prop('selected', selected);
         $li.toggleClass(options.itemSelectedClass);
    }
}); 