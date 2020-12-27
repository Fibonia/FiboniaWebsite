<!-- minified snippet to load TalkJS without delaying your page -->
<script>
(function(t,a,l,k,j,s){
s=a.createElement('script');s.async=1;s.src="https://cdn.talkjs.com/talk.js";a.head.appendChild(s)
;k=t.Promise;t.Talk={v:3,ready:{then:function(f){if(k)return new k(function(r,e){l.push([f,r,e])});l
.push([f])},catch:function(){return k&&new k()},c:l}};})(window,document,[]);
</script>

<!-- container element in which TalkJS will display a chat UI -->
<div id="talkjs-container" style="width: 90%; margin: 30px; height: 500px"><i>Loading chat...</i></div>

<!-- TalkJS initialization code, which we'll customize in the next steps -->
<script>
Talk.ready.then(function() {
    var me = new Talk.User({
        id: "12",
        name: "Copy Abel 12",
        email: "abel12@example.com",
        photoUrl: "https://demo.talkjs.com/img/sebastian.jpg",
        welcomeMessage: "Hey, how can I help?"
    });


    window.talkSession = new Talk.Session({
        appId: "tiSkPmO8",
        me: me
    });

    var other = new Talk.User({
        id: "11",
        name: "Abel",
        email: "abelyagubyan@berkeley.edu",
        photoUrl: "https://demo.talkjs.com/img/alice.jpg",
        welcomeMessage: "Hey there! How are you? :-)"
    });
    var conversation = talkSession.getOrCreateConversation(Talk.oneOnOneId(me, other))
    conversation.setParticipant(me);
    conversation.setParticipant(other);
    var inbox = talkSession.createInbox({selected: conversation});
    inbox.mount(document.getElementById("talkjs-container"));
});
</script>
