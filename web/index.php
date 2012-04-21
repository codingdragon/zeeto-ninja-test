<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
    <title>PHP Ninja Test</title>
    <link type="text/css" rel="stylesheet" media="all" href="style.css" />
</head>

<body>
    <div id="container">
        <div id="page">
            <div id="header">
                <div id="logo">
                    <a href="/"><img src="images/logo.gif" /></a>
                </div>

                <div id="main">
                    <h1>our blog</h1>
                    <div id="content">
                        {{ CONTENT FROM "DB" GOES HERE }}
                    </div>
                </div>

                <div id="right">
                    <h2>subscribe to our newsletter!</h2>
                    <div id="login">
                        <form method="post" action="">
                            <p>
                                <label for="form-firstname">First Name: *</label>
                                <input type="text" maxlength="128" id="form-firstname" size="28" title="First Name" class="form-text" />
                            </p>

                            <p>
                                <label for="form-lastname">Last Name: *</label>
                                <input type="text" maxlength="128" id="form-lastname" size="28" title="Last Name" class="form-text" />
                            </p>

                            <p>
                                <label for="form-email">Email: *</label>
                                <input type="text" maxlength="128" id="form-email" size="28" title="Email" class="form-text" />
                            </p>

                            <p><input type="submit" value="Submit" /></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
