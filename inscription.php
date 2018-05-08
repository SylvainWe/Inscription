<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link title="normal" rel="stylesheet" href="inscription.css" type="text/css">
        <script type="text/javascript" src="inscription1.js"></script>
        <script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
        <link href="css/images/favicon.ico" rel="icon" type="image/x-icon" />
<title>Belgium Store</title>
</head>

<body>
    
    <div class="container">

    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
        <fieldset>

            <h1>Inscription</h1><br/>

        <div class="form-group">
          <label class="col-md-4 control-label">Pseudo</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="pseudo" placeholder="Pseudo" class="form-control"  type="text">
            </div>
          </div>
        </div>
            
        <div class="form-group">
          <label class="col-md-4 control-label">Nom</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input  name="first_name" placeholder="Nom" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label" >Prénom</label> 
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
          <input name="last_name" placeholder="Prénom" class="form-control"  type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->
               <div class="form-group">
          <label class="col-md-4 control-label">E-Mail</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
          <input name="email" placeholder="E-Mail" class="form-control"  type="text">
            </div>
          </div>
        </div>


        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Téléphone</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
          <input name="phone" placeholder="0478 48 99 55" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Adresse</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="address" placeholder="Adresse" class="form-control" type="text">
            </div>
          </div>
        </div>

        <!-- Text input-->

        <div class="form-group">
          <label class="col-md-4 control-label">Ville</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="city" placeholder="Ville" class="form-control"  type="text">
            </div>
          </div>
        </div>
            
        <div class="form-group">
          <label class="col-md-4 control-label">Code Postale</label>  
            <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
          <input name="zip" placeholder="Code Postal" class="form-control"  type="text">
            </div>
        </div>
        </div>


        <!-- radio checks -->
         <div class="form-group">
                                <label class="col-md-4 control-label">Sexe</label>
                                <div class="col-md-4">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="hosting" value="yes" /> Homme
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="hosting" value="no" /> Femme
                                        </label>
                                    </div>
                                </div>
                            </div>

        <!-- Text area -->

        <div class="form-group">
          <label class="col-md-4 control-label">Avatar</label>  
           <div class="col-md-4 inputGroupContainer">
               <input type="file" name="avatar" class="form-control-file">
          </div>
        </div>

                <div class="row">
                <div class="col-md-offset-2 col-md-3">
                <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe" >
                </div>
                </div>
                <div class="col-md-offset-2 col-md-3">
                <div class="form-group">
                <label for="passverif">Vérification mot de passe</label>
                <input type="password" class="form-control" name="passverif" placeholder="Vérification mot de passe" >
                </div>
                </div>
                </div>

        <div class="form-group">
          <label class="col-md-5 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-info" >Envoyer <span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

        </fieldset>
        </form>
    </div>
</body>
</html>