@extends('../templates/mainTemplate')
@section('cssIncludes')

@endsection

<div class="jumbotron" style="background-color: white">
    <label class="display"
           style="color: #8c8c8c; font-size: 20px;">{{$contact -> nom}}  {{$contact -> prenom}}  </label> Contact
    <hr class="my-4">

    <form action="/contacts/edit/{{$contact->id}}" method="POST">
        {{ csrf_field() }}
        <div class="row">

            <div class="col-md-6">
                <div class="card" style="   border-left: 5px solid #95c9de;
                        width: 35rem; height:35rem">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-bottom: 40px;">Identité du contact</h5>

                        <div class="row">
                            <h7 class="card-title" style="margin-left: 15px;">Civilité</h7>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="First group">
                            <a class="btn btn-lg" href="#" role="button"
                               style="background-color: #ED73B2; color: white; margin-bottom: 30px;"><i
                                        class="fa fa-female"> | Madame</i></a>
                        </div>
                        <div class="btn-group mr-2" role="group" aria-label="Second group">
                            <a class="btn btn-lg" href="#" role="button"
                               style="background-color: #72BEE3; color: white; margin-bottom: 30px;"><i
                                        class="fa fa-male"> | Monsieur</i></a>
                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Prénom</label>
                                <input type="text" class="form-control affichage" id="1" name="prenom"
                                       placeholder="Prenom"
                                       value="{{$contact -> prenom}}" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Nom</label>
                                <input type="text" class="form-control affichage" id="2" name="nom" placeholder="Nom"
                                       value="{{$contact -> nom}}" required>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-6">
                                <label for="inputEmail4">Fonction</label>
                                <input type="text" class="form-control" id="fonction" name="fonction"
                                       placeholder="Fonction" value="{{$contact -> fonction}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">Service</label>
                                <input type="text" class="form-control" id="service" name="service"
                                       placeholder="Service" value="{{$contact -> service}}">
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail"
                                       value="{{$contact -> email}}" required>
                            </div>

                        </div>

                        <div class="row">

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Téléphone mobile</label>
                                <input type="text" class="form-control" id="tel" name="telephone" value="{{$contact -> telephone}}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="inputEmail4">Date de naissance</label>
                                <input type="text" class="form-control" id="date_naissance" name="date_naissance"
                                       value="{{$contact -> date_naissance}}">
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card" style="   border-left: 5px solid #95c9de;
                            width: 35rem; height: 35rem">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-bottom: 40px;">Société</h5>


                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Nom</label>
                                <input type="text" class="form-control" id="societe" name="societe" placeholder="Nom"
                                       value="{{$contact -> societe}}">
                            </div>


                        </div>

                        <div class="row">

                            <div class="form-group col-md-12">
                                <label for="inputEmail4">Adresse</label>
                                <textarea type="text" class="form-control" id="adresse" name="adresse"
                                          placeholder="Adresse">{{$contact -> adresse}}</textarea>
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Code postal</label>
                                <input type="text" class="form-control" id="code_postal" name="code_postal" placeholder="Code postal"
                                       value="{{$contact -> code_postal}}">
                            </div>
                            <div class="form-group col-md-9">
                                <label for="inputPassword4">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville" placeholder="Ville"
                                       value="{{$contact -> ville}}">
                            </div>

                        </div>
                        <div class="row">

                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Téléphone</label>
                                <input type="text" class="form-control" id="numero" name="numero"
                                       placeholder="Telephone" value="{{$contact -> numero}}">
                            </div>
                            <div class="form-group col-md-9">
                                <label for="inputPassword4">Site web</label>
                                <input type="text" class="form-control" id="site" name="site"
                                       placeholder="Site Web" value="{{$contact -> site}}">
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="btn btn-info" style="margin-top: 30px;"><i
                        class="fa fa-edit"> | Modifier </i>
            </button>
            <a type="button" class="btn btn-secondary" href="/contacts/listeContacts" style="margin-top: 30px;"><i
                        class="fa fa-list-ul"> | Retour à la liste des contacts </i>
            </a>
        </div>
    </form>
</div>



@section('jsIncludes')

@endsection
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="/js/listeDesContactsDataTableConfig.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $("#date_naissance").datepicker();
    });
</script>

<script>
    $(function () {
        $(".affichage").each(function (e) {
            var element = $(this);
            let text = element.val();
            let new_value = "";
            new_value += text.toLowerCase();
            element.val(new_value.charAt(0).toUpperCase() + new_value.slice(1));
        });
    });
</script>

