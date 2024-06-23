function redirectToHome() {
    console.log("Redirecting to home...");
    window.location.href="../index.php";
}

function toggleFullscreen() {
    if (!document.fullscreenElement) { //if document isn't in fullscreen
        document.documentElement.requestFullscreen().catch(err => {
            //give error with the error message attached
            alert(`Error attempting to enable full-screen mode: ${err.message} (${err.name})`);
        });
    } else {
        if (document.exitFullscreen) {
            //document
            document.exitFullscreen();
        }
    }
}