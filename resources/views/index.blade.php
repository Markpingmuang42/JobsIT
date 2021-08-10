<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="../css/index.css">

    <title>Jobs IT</title>
</head>

<body>

    <div class="main">
        <div class="login">
            <a href="login/index">login</a> 
        </div>
        <div class="logoAndText">
            <img src="../image/logoJobsIT.jpg" alt="logo JobsIT">
            <h1>Web Application Find the IT Jobs around you (JobsIT)</h1>
        </div>
        <div class="container">
            <button class="jobsSearch" onclick="window.location.href='{{ url('/jobs/jobsIndex/') }}'">
                For Jobs Search
            </button>
            <button class="applicantsSearch" onclick="window.location.href='#';">
                For Applicants Search
            </button>
        </div>
    </div>
</body>

</html>