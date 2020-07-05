<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Laravel</title>
    </head>
    <body>
      <div >
        TEST
      </div>
      <a href="http://127.0.0.1:8000/">Link back to home</a>
      <div>
        This is the name twice:
        <?= htmlspecialchars($name, ENT_QUOTES);?>
        <!--
        https://stackoverflow.com/questions/2020445/what-does-mean-in-php
        This is the same as the below - laverel has its own shorthand for this -->
        {{ $name }}
        <!-- The above will make the $name variable available in the view and give it htmlspecialchars protection from hackers
        and requires the php view to have .blade.php file naming
        The compiled version of this is in storage/framework/views
        if you put {!! $name !!} it will return the value without the htmlspecialchars protection.
      -->
      </div>
    </body>

</html>
