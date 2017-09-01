<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

</head>
<body>
     <header>
        This is a header area.
     </header>

     <div ng-app="">
        <p>Name: <input type="text" ng-model="name"></p
        <p ng-bind="name"></p>
    </div>        


    <div ng-app="" ng-init="firstName='John'">
    
    <p>The name is <span ng-bind="firstName"></span></p>
    
    </div>


    <div data-ng-app="" data-ng-init="firstName='John'">

<p>The name is <span data-ng-bind="firstName"></span></p>

</div>


<div ng-app="">
  <p>My first expression: {{ 5 + 5 }}</p>
</div>

<div ng-app="">
  <p>My first expression: {{ 5 + 5 }}</p>
</div>











<br><br>

  <footer>
    <p>Copyright &copy; 2016 Clear View Escapes. All rights reserved. <a href="#">Get in Touch</a></p>
  </footer>
</body>
</html>