<!DOCTYPE html>
<html lang="en">

<head>
    {include 'SAMPLE_HEAD'}
</head>

<body>
    <div id="wrapper" class="d-flex flex-column justify-content-between">
        {include 'SAMPLE_MODALS'}
        {include 'SAMPLE_HEADER'}
        <main class="main flex-grow-1">
            {$_modx->resource.content}
        </main>
        {include 'SAMPLE_FOOTER'}
    </div>
    {include 'SAMPLE_SCRIPTs'}
</body>

</html>