<?php include("headnav.html")?>

<html lang="en" ng-app="phonebook">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script data-require="angular.js@*" data-semver="1.3.5" src="https://code.angularjs.org/1.3.5/angular.js"></script>
    <script data-require="angular-route@*" data-semver="1.3.5" src="https://code.angularjs.org/1.3.5/angular-route.js"></script>
    
	
  </head>
  <body ng-controller="appController">
    <div class="concontainer">
      <div class="panel panel-info">
        <div class="panel-heading">
           <div class="panel-title">
     <h3 class="text-center">Canopy Phone Book</h3>                
                </div>  
        </div>
        <div class="panel-body">
          <div class="form-group has-info has-feedback">
             <label for="seacrh" class="col-sm-2 control-label"><h4>Search:</h4> </label>
                    <div class="col-sm-5">
                        <input type="text"  name="search" ng-model ="searchContact" class="form-control">
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>                                            
                    </div>
   
          </div>
            
            
        <span>No of contacts to show:&nbsp;&nbsp;<input type="number" step="1" min="0" ng-model="rowLimit"/></span>
                </div>
          </div>
          </form>    
            

         <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr>
                        <th>Names</th>
                        <th>Phone Number</th>
                      <th>E-mail</th>
                        <th>Options</th>
                    </tr>
                   </thead>
                   <tbody>
   <tr ng-repeat="contact in info | limitTo:rowLimit| orderBy: 'name'| filter: search">
           <td>{{contact.name}}</td>
           <td>{{contact.phone}}</td>
           <td>{{contact.email}}</td>
                       
    <td><a href="#" ng-click="removeContact()"><span class="glyphicon glyphicon-trash"></span>&nbsp;</a></td>
                    </tr>
                  </tbody>
                </table>
             <pagination> 
    <ul class="pagination">
    <li><a class="active">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
  </ul>
    </pagination>
              </div>
        </div>
<div class="panel-footer">
                <form class="form-inline">
                    <div class="form-group">
                        <span>Name：</span>
         <input type="text" class="form-control" text-angular ng-model="newName" maxlength="99">
                      
                    </div>
                    <div class="form-group">
         <span>Phone number：</span>
                        <input type="tel" class="form-control" placeholder="xx-xxx-xxxx" ng-model="newPhone" ng-pattern="/^\d{2}-\d{3}-\d{4}$/" >
                    </div> 
                   <div class="form-group">
                        <span>E-mail：</span>
                        <input type="email" id="email" name="email" class="form-control" ng-model="newEmail" placeholder="email@example.com">
                    </div>
        <button class="btn btn-primary"  ng-click="addContact()">
    <span class ="glyphicon glyphicon-thumbs-up"></span> Add Contact</button>
    
                </form>     
</div>
      </div>
    </div>
  </body>


<script>
(function(){
  var app = angular.module("phonebook",[]);
  var appController=function($scope){
    
    $scope.rowLimit=3;
    $scope.currentPage = 0;
  $scope.numPerPage = 9;
 
  
     $scope.info=[
{name:"Jesse Attwood",phone:'05-020-2356', email:'ja57@gmail.com'},
{name:'Oliver Graham', phone:'02-030-4986', email:'oliverG2@gmail.com'},
{name:'Maree Scott', phone:'01-111-2357', email:'Mareew32@Gmail.com'},
{name:'salma', phone:'01-268-1548', email:'salma@gmail.com'},
{name:'ahmed', phone:'02-030-4986', email:'ah.basem@yahoo.com'},
{name:'laila', phone:'01-111-2357', email:'laila@gmail.com'},
{name:'salma', phone:'01-268-1548', email:'salma@gmail.com'},
{name:'ahmed', phone:'02-030-4986', email:'ah.basem@yahoo.com'},
{name:'laila', phone:'01-111-2357', email:'laila@gmail.com'},
{name:'salma', phone:'01-268-1548', email:'salma@gmail.com'},
{name:'ahmed', phone:'02-030-4986', email:'ah.basem@yahoo.com'},
{name:'laila', phone:'01-111-2357', email:'laila@gmail.com'},
{name:'salma', phone:'01-268-1548', email:'salma@gmail.com'}]; 
 
    
    $scope.addContact = function(){		
  for(i=0;i<$scope.info.length&&$scope.info.length<10000;i++){
    
	$scope.info.push({ 'name':$scope.info.newName, 'phone': $scope.newPhone, 'email':$scope.newEmail });
	$scope.newName='';
	$scope.newPhone='';
	$scope.newEmail='';
   
    }
};
  $scope.removeContact = function() { 
  $scope.info.splice(this.$index, 1);     
};
    
 $scope.search= function(item){
            
    if($scope.searchContact==undefined){
                return true;
            }
            
            else{
               
       if($scope.searchContact.toLowerCase() && item.name.toLowerCase().indexOf($scope.searchContact.toLowerCase())   != -1||  item.phone && item.phone.indexOf($scope.searchContact)!=-1)
                    {
                        return true;
                    }
                                  }
            
            return false;    
        };
    
   
      
    
    };
app.controller("appController",appController);
}());






</script>

<hr class="solid">

<div class="ceo">
    
<table>
  <tr>
    <th>Branch</th>
    <th>Position</th>
    <th>Contact</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td>Magazzini Alimentari Riuniti</td>
    <td>Giovanni Rovelli</td>
    <td>Italy</td>
  </tr>
</table>

</div>

<?php include("footer.html")?>

