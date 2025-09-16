<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Advocate Sachin Prakash - Home</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="home-container" style="min-height:100vh;display:flex;flex-direction:column;justify-content:center;align-items:center;background:rgba(0,0,0,0.5);">
        <h1>Welcome to Advocate Sachin Prakash's Portfolio</h1>
        <p>Legal expertise. Trusted representation. Personalized service.</p>
    </div>
    <div class="enter-btn-bottom">
        <a href="profile.php" class="home-btn"><span style='font-size:35px;'><b>&#8250;</b></span></a>
    </div>
    <script>
document.querySelector('.home-btn').addEventListener('click', function(e) {
    e.preventDefault();
    document.body.classList.add('slide-left');
    setTimeout(() => {
        window.location = this.href;
    }, 600);
});
</script>
</body>
</html>