<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $this->siteTitle(); ?></title>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="/css/bootstrap.min.css" media="screen" title="notitle" charset="utf-8">
    <link rel="stylesheet" href="/css/custom.css" media="screen" title="notitle" charset="utf-8">
    <script src="/js/jQuery-2.2.4.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <?php echo $this->content('head');?>
  </head>
  <body>
    <?php echo $this->content('body');?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>