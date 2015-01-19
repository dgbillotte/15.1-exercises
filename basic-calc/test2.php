<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);

    $job_type = $_GET['job_type'];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="">

        <?php if($job_type) { ?>

        <input type="hidden" name="job_type" value="<?php echo $job_type?>">
        <h2>Inputs thus far</h2>

        <div>Job Type: <?php echo $job_type; ?></div>

        <h2>Current Question</h2>
        <div>Ask another question here</div>

        <?php } else { ?>

        <h2>Current Question</h2>
        <div>Is this a new-build or a remodel?
            <select name="job_type">
                <option>new build</option>
                <option>remodel</option>
            </select>
        </div>

        <?php } ?>

        <button>Submit</button>
    </form>
</body>
</html>