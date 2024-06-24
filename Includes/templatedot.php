<!-- Alexandro x Lou -->

<?php
    /*Lou & Deni*/
    session_start();
    if(!isset($_SESSION["user"]))
    {   
        echo '<input onclick="toggleNav()" type="checkbox" id="nav_check" hidden>';
        echo '<label for="nav_check" class="hamburger" id="hamburger">';
        echo '<span>M</span><span>E</span><span>N</span><span>U</span>';
        echo '</label>';
        echo '<p class="welcome">Welcome to our website</p>';
        echo '<div id="mySidenav" class="topnav">';
        echo '<div class="navrow">';
        echo '<div class="navleft">';
        echo '<h2>HowToWebsite</h2>';
        echo '<a href="../index.php">Home</a>';
        echo '<a class="active" href="templatedot.php">Course</a>';
        echo '<a href="userDashboard.php">Dashboard</a>';
        echo '<a href="discussion.php">Forum</a>';
        echo '<a href="register.php">Sign up</a>';
        echo '<a href="login.php">Log in</a>';  
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }else {
        echo '<input onclick="toggleNav()" type="checkbox" id="nav_check" hidden>';
        echo '<label for="nav_check" class="hamburger" id="hamburger">';
        echo '<span>M</span><span>E</span><span>N</span><span>U</span>';
        echo '</label>';
        echo '<p class="welcome">Welcome to our website</p>';
        echo '<div id="mySidenav" class="topnav">';
        echo '<div class="navrow">';
        echo '<div class="navleft">';
        echo '<h2>HowToWebsite</h2>';
        echo '<a href="../index.php">Home</a>';
        echo '<a class="active" href="templatedot.php">Course</a>';
        echo '<a href="userDashboard.php">Dashboard</a>';
        echo '<a href="discussion.php">Forum</a>';
        echo '<a href="logout.php">Log-out</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }

    $currentPage = 'templatedot.php';
    $nextPage = 'lexidea.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>How to Website - Course</title>
        <link rel="stylesheet" href="../CSS/cours.css">
        <script src="../JS/mobileMenu.js"></script>
    </head>

    <body>
        <main>
            <div class="canvas">
                <div class="maintitle">
                    <h1>Course</h1>
                </div>

                <br><br>

                        <div class="card">
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
                            </div>
                        </div>

                        <div class="card">
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

                        <div class="card">
                            <h2>3. Visual Studio Code Connection with Server:</h2>
                            <br>
                            <div class="content" style="display: block;">
                            <ul>
                                <li>go to the official <a href="https://code.visualstudio.com/" target="”_blank”"> VS-Code website</a> and download the preferred installer</li>
                                <li>After installing, this UI should pop up: *picture of VS Code*</li>
                            </ul>
                            <br>
                            <h4>Set up SSH Connection to Linux Server:</h4>
                            <ul>
                                <li> Open up Visual Studio again</li>
                                <li> Go to extensions and install "Remote - SSH" by Microsoft"</li>
                                <li> Now press F1 and enter "Remote-SSH: Open Configuration File"</li>
                                <li> Select the file and your editor will open the config file.</li>
                                <li>Host Example_Server_123 (Alias)
                                    <br>
                                    HostName 192.168.1.XXX (The current Server's IP Adress)
                                    <br>
                                    User example_user_123 (The Server's username)
                                    <br>
                                    IdentityFile /home/example_user_123/.ssh/authorized_keys</li>
                                    <li> To add a public key, open up the command prompt of your local computer</li>
                                    <li> enter: ssh example_user_123@192.168.1.XXX</li>
                                    <li> after logging in, enter: nano ~/.ssh/authorized_keys</li>
                                    <li> inside, enter this line of code and then save</li>
                                    <li> chmod 700 ~/.ssh
                                        <br>
                                        chmod 600 ~/.ssh/authorized_keys</li>
                                        <li> After saving press F1 again and enter "Remote-SSH: Connect to Host"</li>
                                        <li> Select the file and your editor will open another window</li>
                                        <li> It will ask what OS the server uses (Linux)</li>
                                        <li> then click continue, inside the console, enter the server's Password and then wait</li>
                                        <li> It will take a bit time until VS Code completely connects to the Linux Server</li>
                                        <li> To open files from the server, you can open file like always in VS code</li>
                                </ul>
                            </div>
                        </div>

                        <div class="card">
                            <h2>4. GitHub Connection to VS Code</h2>
                            <div class="content" style="display: block;">
                            <ul>
                                <li> Go to GitHub's website and sign in</li>
                                <li> inside click "New repository"</li>
                                <li> Choose a Repository name, select Public or Private, Add a README file</li>
                                <li> After creating a repository, go to VS Code</li>
                                <li> connect with VM Server via SSH again if necessary</li>
                                <li> to give permisson, enter this line into the terminal inside VS Code (when connected to Server)
                                    <br>
                                    sudo chown example_user_123 /var/www/html
                                    <br>
                                    (example_user_123 is the server's user name)</li>
                                    <li> Click on view -> Source Control or click directly on the third icon on the left</li>
                                    <li> Click on clone repository and connect your GitHub with VS Code</li>
                                    <li> After that, choose the repository you want to clone</li>
                                </ul>
                                <br>
                            </div>
                        </div>

                        <div class="card">
                            <h2>5. Making a html page</h2>
                            <div class="content" style="display: block;">
                            <ul>
                                <li> Open VS Code and create a new .html file named index (index.html) inside /var/www/html</li>
                                <li> sudo chmod index.html to give rights to save the file</li>
                                <li> This is a basic template, for a more detailed look at html, visit: 
                                    <br>
                                    <a href="https://www.w3schools.com/html/default.asp" target="”_blank”"> https://www.w3schools.com/html/default.asp</a></li>
                                </ul>
                                <br> 
                                <div class="exercise" style="width: 100%;">
                                    <h3>Example </h3>
                                    <div class="exercise-content" style="display: none;">
                                        <pre><code> &lt;!DOCTYPE html&gt;                                                                           </code></pre>
                                        <pre><code>     &lt;html lang="en"&gt;                                                                      </code></pre>
                                        <pre><code>         &lt;head&gt;                                                                            </code></pre>
                                        <pre><code>             &lt;meta charset="UTF-8"&gt;                                                        </code></pre>
                                        <pre><code>             &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;        </code></pre>
                                        <pre><code>             &lt;title&gt;My Webpage&lt;/title&gt;                                               </code></pre>
                                        <pre><code>         &lt;/head&gt;                                                                           </code></pre>
                                        
                                        <pre><code>         &lt;body&gt;                                                                            </code></pre>
                                        <pre><code>             &lt;header&gt;                                                                      </code></pre>
                                        <pre><code>                 &lt;h1&gt;Welcome to My Webpage&lt;/h1&gt;                                      </code></pre>
                                        <pre><code>             &lt;/header&gt;                                                                     </code></pre>
                                        
                                        <pre><code>             &lt;nav&gt;                                                                         </code></pre>
                                        <pre><code>                 &lt;ul&gt;                                                                      </code></pre>
                                        <pre><code>                     &lt;li&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;                       </code></pre>
                                        <pre><code>                     &lt;li&gt;&lt;a href="#"&gt;About&lt;/a&gt;&lt;/li&gt;                      </code></pre>
                                        <pre><code>                     &lt;li&gt;&lt;a href="#"&gt;Contact&lt;/a&gt;&lt;/li&gt;                    </code></pre>
                                        <pre><code>                 &lt;/ul&gt;                                                                     </code></pre>
                                        <pre><code>             &lt;/nav&gt;                                                                        </code></pre>
                                
                                        <pre><code>             &lt;main&gt;                                                                        </code></pre>
                                        <pre><code>                 &lt;section&gt;                                                                 </code></pre>
                                        <pre><code>                     &lt;h2&gt;About Me&lt;/h2&gt;                                               </code></pre>
                                        <pre><code>                     &lt;p&gt;This is where you can provide information about yourself.&lt;/p&gt;</code></pre>
                                        <pre><code>                 &lt;/section&gt;                                                                </code></pre>
                                        <pre><code>             &lt;/main&gt;                                                                       </code></pre>

                                        <pre><code>             &lt;footer&gt;                                                                      </code></pre>
                                        <pre><code>                 &lt;p&gt;&copy; 2024 My Webpage&lt;/p&gt;                                       </code></pre>
                                        <pre><code>             &lt;/footer&gt;                                                                     </code></pre>
                                        <pre><code>         &lt;/body&gt;                                                                           </code></pre>
                                        <pre><code>    &lt;/html&gt;                                                                                </code></pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="navigation-buttons">
                                <a href="<?php echo $currentPage; ?>" class="button">Previous</a>
                                <a href="<?php echo $nextPage; ?>" class="button">Next</a>
                            </div>
                        </div>
                
            </div>
        </main>
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

        
    </script>
    </body>
</html>