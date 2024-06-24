//Pedro

function reply(id, name) {
    const title = document.getElementById('title');
    title.innerHTML = "Reply to " + name;
    document.getElementById('reply_id').value = id;

    // Scroll to the top of the page
    window.scrollTo({ top: 0, behavior: 'smooth' });
}