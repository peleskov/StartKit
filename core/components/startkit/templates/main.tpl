<!DOCTYPE html>
<html lang="en">

<head>
    {include 'HEAD'}
</head>

<body>
    <div id="wrapper" class="d-flex flex-column justify-content-between">
        {include 'MODALS'}
        {include 'HEADER'}
        <main class="main flex-grow-1">
            {$_modx->resource.content}
        </main>
        {include 'FOOTER'}
    </div>
    {include 'SCRIPTs'}
</body>

</html>