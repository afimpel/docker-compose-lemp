<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LEMP STACK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/spacelab/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-mfizz/2.4.1/font-mfizz.min.css" integrity="sha512-Cdvnk1SFWqcb3An6gMyqDRH40Js8qmsWcSK10I2gSifCe2LilaPMsHd6DldEvQ3uIlCb1qdRUrNeAFFleOu4xQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="padding-top: 96px;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

        <div class="container">
            <a href="./" class="navbar-brand"><i class="icon-docker"></i> LEMP</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="/phpinfo.php"><i class="icon-php"></i> PHP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" target="_blank" href="/adminer"><i class="icon-database"></i> Adminer</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="download">Source Code</a>
                        <div class="dropdown-menu" aria-labelledby="download">
                            <a class="dropdown-item" rel="noopener" target="_blank" href="https://github.com/afimpel/docker-compose-lemp">Open in GitHub</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" rel="nofollow" data-hydro-click="{&quot;event_type&quot;:&quot;clone_or_download.click&quot;,&quot;payload&quot;:{&quot;feature_clicked&quot;:&quot;DOWNLOAD_ZIP&quot;,&quot;git_repository_type&quot;:&quot;REPOSITORY&quot;,&quot;repository_id&quot;:519922868,&quot;originating_url&quot;:&quot;https://github.com/afimpel/docker-compose-lemp/code_menu_contents/master&quot;,&quot;user_id&quot;:null}}" data-hydro-click-hmac="bee34c0eed070912d926400bda3bf4966843f92160eb351205fa11983e0a0d86" data-ga-click="Repository, download zip, location:repo overview" data-open-app="link" href="https://github.com/afimpel/docker-compose-lemp/archive/refs/heads/master.zip">
                                <svg aria-hidden="true" height="16" viewBox="0 0 16 16" version="1.1" width="16" data-view-component="true" class="octicon octicon-file-zip mr-2">
                                    <path fill-rule="evenodd" d="M3.5 1.75a.25.25 0 01.25-.25h3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h2.086a.25.25 0 01.177.073l2.914 2.914a.25.25 0 01.073.177v8.586a.25.25 0 01-.25.25h-.5a.75.75 0 000 1.5h.5A1.75 1.75 0 0014 13.25V4.664c0-.464-.184-.909-.513-1.237L10.573.513A1.75 1.75 0 009.336 0H3.75A1.75 1.75 0 002 1.75v11.5c0 .649.353 1.214.874 1.515a.75.75 0 10.752-1.298.25.25 0 01-.126-.217V1.75zM8.75 3a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM6 5.25a.75.75 0 01.75-.75h.5a.75.75 0 010 1.5h-.5A.75.75 0 016 5.25zm2 1.5A.75.75 0 018.75 6h.5a.75.75 0 010 1.5h-.5A.75.75 0 018 6.75zm-1.25.75a.75.75 0 000 1.5h.5a.75.75 0 000-1.5h-.5zM8 9.75A.75.75 0 018.75 9h.5a.75.75 0 010 1.5h-.5A.75.75 0 018 9.75zm-.75.75a1.75 1.75 0 00-1.75 1.75v3c0 .414.336.75.75.75h2.5a.75.75 0 00.75-.75v-3a1.75 1.75 0 00-1.75-1.75h-.5zM7 12.25a.25.25 0 01.25-.25h.5a.25.25 0 01.25.25v2.25H7v-2.25z"></path>
                                </svg>
                                Download ZIP
                            </a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-md-auto">
                    <li class="nav-item">
                        <a target="_blank" rel="noopener" class="nav-link" href="https://github.com/afimpel"><i class="bi bi-github"></i> GitHub</a>
                    </li>
                    <li class="nav-item">
                        <a target="_blank" rel="noopener" class="nav-link" href="https://twitter.com/afimpel"><i class="bi bi-twitter"></i> Twitter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="title text-success">
            <i class="icon-docker"></i> LEMP STACK
        </h1>
        <small class="muted">PHP / Composer / Nginx / MariaDB / Adminer / Redis</small>
        <h2 class="subtitle">
            Your local development environment in Docker
        </h2>
    </div>
    <div class="container-fluid py-2">
        <div class="rounded row border border-success m-2 p-2 pb-4">
            <div class="col-12 col-md-4">
                <h3 class="title is-3 has-text-centered">Environment</h3>
                <hr>
                <div class="list-group">
                    <span class="list-group-item  d-flex justify-content-between align-items-center py-1">
                        <i class="icon-nginx"> Server:</i>
                        <small class="badge text-light bg-info rounded-pill px-2">
                            <?= $_SERVER['SERVER_SOFTWARE']; ?>
                        </small>
                    </span>
                    <a href="/phpinfo.php" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-1">
                        <i class="icon-php"> PHP:</i>
                        <small class="badge text-light bg-info rounded-pill px-2">
                            <?= phpversion(); ?>
                        </small>
                    </a>
                    <span class="list-group-item  d-flex justify-content-between align-items-center py-1">
                        <i class="icon-php"> XDEBUG:</i>
                        <small class="badge text-light bg-info rounded-pill px-2">
                            <?= str_replace(" ", "<br />", $_SERVER['XDEBUG_CONFIG']); ?>
                        </small>
                    </span>
                    <a href="/adminer" target="_blank" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-1">
                        <i class="icon-mariadb"> mariaDB:</i>
                        <small class="badge text-light bg-info rounded-pill px-2">
                            <?php
                            $link = mysqli_connect("mariadb", "root", getenv('MYSQL_ROOT_PASSWORD'), null);
                            if (mysqli_connect_errno()) {
                                printf("%s", mysqli_connect_error());
                            } else {
                                echo explode(":", mysqli_get_server_info($link))[1];
                            } ?>
                        </small>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <h3 class="title is-3 has-text-centered">Quick Links</h3>
                <hr>
                <div class="list-group">
                    <a target="_blank" class="list-group-item list-group-item-action py-1" href="/phpinfo.php"><i class="icon-php"></i> phpinfo()</a>
                    <a target="_blank" class="list-group-item list-group-item-action py-1" href="/adminer"><i class="icon-database"></i> adminer</a>
                    <a target="_blank" class="list-group-item list-group-item-action py-1" href="/test_db.php"><i class="icon-mariadb"></i> Test DB Connection with mysqli</a>
                    <a target="_blank" class="list-group-item list-group-item-action py-1" href="/test_db_pdo.php"><i class="icon-mariadb"></i> Test DB Connection with PDO</a>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <h3 class="title is-3 has-text-centered">Database List</h3>
                <hr>
                <div class="list-group">
                    <?php
                    $set = mysqli_query($link, 'SHOW DATABASES;');
                    while ($db = mysqli_fetch_row($set)) { ?>
                        <a target="_blank" class="list-group-item list-group-item-action py-1" href="/adminer?server=mariadb&username=root&db=<?= $db[0]; ?>"><i class="icon-database"></i> <?= $db[0]; ?> </a>
                    <?php } ?>
                </div>
            </div>
        </div><?php mysqli_close($link); ?>
        <div class="container">
            <h3>access to php composer:</h3>
            <ol>
                <li>Open terminal (ej: xterm, gnome-terminal)</li>
                <li>paste, this command: <code>docker exec -u $(id -u ${USER}):$(id -g ${USER}) -it phpFPM bash</code></li>
                <li>exit: <code>exit</code> o <code>ctrl+d</code> </li>
            </ol>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>