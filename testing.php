<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proportional Resizing Profiles</title>
    <style>
        body {
            margin: 0;
            overflow: hidden; /* Prevents scrolling */
            /*display: flex;*/
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
        }
        .row {
            display: flex;
            width: 80vw; /* Adjust the container width */
            justify-content: space-around;
            margin: 0 auto; /* Center the row horizontally */
        }
        .profilecolumn {
            width: 20vw; /* Each profile column takes 20% of the viewport width */
            background-color: #1A4D2E;
            color: white;
            text-align: center;
            /*padding: 1vw;*/
            box-sizing: border-box;

            float: left;
            border: 3px;

            margin-left: 2%;
            margin-right: 0px;
            align-items: center;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            padding-bottom: 20px;
        }
        .profileimage {
            width: 100%; /* Image takes full width of the column */
            height: auto;

            background-color: gray;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin-bottom: 20px;
            object-fit: cover;
        }
        .name {
            font-size: 2vw; /* Adjust font size based on viewport width */
        }
        p, .job {
            font-size: 1.5vw; /* Adjust font size based on viewport width */
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="profilecolumn">
            <img class="profileimage" src="Images/Flep.webp" alt="Pedro">
            <div class="name">Pedro</div>
            <p>"Hard at work? More like work while hard"</p>
            <br>
            <div class="job">MySQL</div>
            <div class="job">False Information</div>
        </div>
        
        <div class="profilecolumn">
            <img class="profileimage" src="Images/pfp/pfp_ghost.png" alt="Ghost">
            <div class="name">Ghost</div>
            <p>"Who?"</p>
            <br>
            <div class="job">Frontend</div>
            <div class="job">Design</div>
        </div>
        
        <div class="profilecolumn">
            <img class="profileimage" src="Images/pfp/pfp_compressed_square.jpg" alt="Deni">
            <div class="name">Deni</div>
            <p>"PlayerPlus591"</p>
            <br>
            <div class="job">Backend/Frontend</div>
            <div class="job">MySQL</div>
        </div>
        
        <div class="profilecolumn">
            <img class="profileimage" src="Images/Flep.webp" alt="Alexandro">
            <div class="name">Alexandro</div>
            <p>"Hallo Polen"</p>
            <br>
            <div class="job">Backend</div>
            <div class="job">Content</div>
        </div>
    </div>
</body>
</html>
