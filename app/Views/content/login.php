<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Example 07</title>

    <script>
        function auth_popup(provider) {
            // replace 'path/to/hybridauth' with the real path to this script
            var authWindow = window.open('http://localhost:8888/hauth/callback?provider=' + provider, 'authWindow', 'width=600,height=400,scrollbars=yes');
            return false;
        }
    </script>

</head>

<body>
    <h1>Sign in</h1>

    <ul>

        <?php foreach ($hybridauth->getProviders('Facebook') as $name) : ?>
            <?php if (!isset($adapters[$name])) : ?>
                <li>
                    <a href="#" onclick="javascript:auth_popup('<?php print $name ?>');">
                        Sign in with <?php print $name ?>
                    </a>
                </li>
            <?php endif; ?>
        <?php endforeach; ?>

    </ul>

    <?php if ($adapters) : ?>
        <h1>You are logged in:</h1>
        <ul>
            <?php foreach ($adapters as $name => $adapter) : ?>
                <li>
                    <strong><?php print $adapter->getUserProfile()->displayName; ?></strong> from
                    <i><?php print $name; ?></i>
                    <span>(<a href="<?php print $config['callback'] . "?logout={$name}"; ?>">Log Out</a>)</span>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>

</html>
