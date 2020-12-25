<html>
<title>Contact</title>

<body style="background: ghostwhite; margin-top: 20px">
<div class="heading" style="text-align: center">
    <h2>AishuArts</h2>
</div>
<div class="card" style="background: white; margin: 5%; padding: 5%">
    <div class="card-content">
        <h3>Contact Mail</h3>
        <p>Name: {{ $content->name }}</p>
        <p>Email: {{ $content->email }}</p>
        <p>Subject: {{ $content->subject }}</p>
        <p>Content: {{ $content->content }}</p>

    </div>

</div>

</body>
</html>
