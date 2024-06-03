<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>How to Website</title>
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f7f7f7;
                color: #333;
                margin: 0;
                padding: 20px;
                display: flex;
                flex-direction: column;
                align-items: center;
            }
            .topic, .exercise {
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 2px 4px rgba(0,0,0,0.1);
                margin-bottom: 20px;
                overflow: hidden;
                width: 80%; 
                max-width: 1200px; 
            }
            .topic > h2, .exercise > h3 {
                background-color: #11CC00;
                border-radius: 8px;
                color: #ffffff;
                margin: 0;
                padding: 10px 20px;
                cursor: pointer;
                user-select: none;
                transition: background-color 0.3s ease;
                text-align: center;
            }
            .topic > h2:hover, .exercise > h3:hover {
                background-color: #11CC00;
                border-radius: 8px;
            }
            .content, .exercise-content {
                display: none;
                padding-left: 10%;
                padding-right: 10%;
                padding-top: 5%;
                padding-bottom: 5%;
                border-top: 1px solid #eee;
                text-align: center; /* Center align the inner content */
            }
            
            ul {
                line-height: 1.6;
                padding: 0; /* Reset padding */
                margin: 0 auto; /* Center the list */
                width: 90%;
            }
   
            p, li {
                padding-left: 1%;
                padding-right: 1%;
                text-align: left; /* Ensures text within paragraphs and list items is left-aligned */
            }

            .color-square {
            width: 25vw; /* 1/4 of the viewport width */
            height: 25vw; /* Maintain square shape */
            }

        </style>
    </head>
    <?php
    ?>
    <body>
        <h1>How to website</h1>
        <h3>Course</h3>
           
            <div class="topic">
                <h2>1. Ubuntu Server installation</h2>
                <div class="content" style="display: block;">
                    <h4>UBUNTU LTS Server Installation Documentation:</h4>
                    <ul>
                        <li> Install Ubuntu Lts .iso file <a href="https://ubuntu.com/download/desktop" target="”_blank”"> (latest) </a></li>
                        <li> Open Oracle VM VirtualBox</li>
                        <li> Click "New"</li>
                        <li> Give a name (<b>ExampleUbuntu Server</b>)</li>
                        <li> Select Ubuntu Server .iso file in "ISO Abbild"</li>
                        <li> Give a username (<b>ServerUserExample</b>)</li>
                        <li> Give a password (<b>Example1234</b>)</li>
                        <li> Give a Hostname and Domain name (<b>ExampleHost & myguest.virtualbox.org</b>)</li>
                        <li> Select available RAM and CPU cores (4,6 GB & 3 CPU Cores)</li>
                        <li> Select available space (25 Gb)</li>
                    </ul>
                    <p>:></p>
                    <br>
                    <div class="exercise" style="width: 100%;">
                        <h3>Ex. 1</h3>
                        <div class="exercise-content" style="display: none;">
                            <p>:<</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="topic">
                <h2>2. Ubuntu server setup</h2>
                <div class="content" style="display: block;">
                    <h4>-> Profile setup:</h4>
                    <ul>
                        <li> Your name: <b>ExampleName</b></li>
                        <li> Your server's name: <b>example_server_123</b></li>
                        <li> Pick a username: <b>example_user_123</b></li>
                        <li> Choose a password: <b>ExamplePassword123</b></li>
                        <li> Confirm a password: <b>ExamplePassword123</b></li>
                    </ul>
                    <br>
                    <h4>After installing, in Ubuntu Console:</h4>
                    <ul>
                    <li>Install Apache by entering "sudo apt install apache2" in the console (Ubuntu Console)</li>
                    <li>Install MySQL by entering "sudo apt install mysql-server"</li>
                    <li>Install PHP by entering "sudo mysql_secure_installation"</li>
                    <li>Go to the directory /var/www/html (don't forget cd)</li>
                    <li>Create info.php by entering "sudo touch info.php"</li>
                    <li>Go inside by using "sudo nano info.php"</li>
                    <li>Inside info.php enter this line of code and then save: <pre><code>&lt;?php phpinfo(); ?&gt;</code></pre></li>
                    <li>Now go to the machine's settings in Oracle VM Virtual Box</li>
                    <li>Inside the Network setting, choose "bridged adapter" when clicking "Attached to"</li>
                    <li>After that, go to a web browser and enter the Server's IP and then /info.php</li>
                    <li>The Server's IP Address is searchable by entering "ifconfig" (It may ask to install an add-on)</li>

                    </ul>
                    <br>
                </div>
            </div>
        
            <div class="color-square" id="colorSquare"></div>

    </body>
    <script>

        document.addEventListener('click', function(e) {
            if (e.target.tagName === 'H2' && e.target.parentElement.classList.contains('topic')) {
                var content = e.target.nextElementSibling;
                toggleDisplay(content);
            } else if (e.target.tagName === 'H3' && e.target.parentElement.classList.contains('exercise')) {
                var content = e.target.nextElementSibling;
                toggleDisplay(content);
            }
        });
    
        function toggleDisplay(element) {
            if (element.style.display === 'block') {
                element.style.display = 'none';
            } else {
                element.style.display = 'block';
            }
        }

        function getRandomColor() {
            const letters = '0123456789ABCDEF';
            let color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }

        function changeColor() {
            const square = document.getElementById('colorSquare');
            square.style.backgroundColor = getRandomColor();
        }

        setInterval(changeColor, 100); 
    </script>
    </body>
</html>