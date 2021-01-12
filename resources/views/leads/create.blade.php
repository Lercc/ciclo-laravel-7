<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Laravel</title>

      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      
      <!-- Styles Boostrap v-5.0 -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
  </head>
  <body>
    <h1 class="text-center"">Leads create form</h1>

    <div class="container-sm ">
      <div class="row bg-primary">
        <div class="col-lg-8 mx-auto bg-info">
          <div class="card border-1 shadow-sm bg-danger">
            <div class="card-body">
              @if($errors->any())
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                    - {{ $error }} <br>                    
                  @endforeach
                </div>
              @endif

              <form action="{{ route('leads.store') }}" method="POST">
                <div class="col">
                  <div class="mb-3">
                    <input 
                      type="text" 
                      name="name"
                      class="form-control"
                      placeholder="Nombre"
                      value="{{ old('name') }}">
                  </div>
                  <div class="mx-auto mb-3">
                    <input 
                      type="text" 
                      name="lastname"
                      class="form-control"
                      placeholder="Apellidos"
                      value="{{ old('lastname') }}">
                  </div>
                  <div class="col-6 mx-auto mb-3 bg-dark">
                    @csrf
                    <input 
                      type="submit" 
                      value="enviar"
                      class="btn btn-md btn-success form-control">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
