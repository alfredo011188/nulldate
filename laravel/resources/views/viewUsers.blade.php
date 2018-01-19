@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <div class="panel-heading">Registro de usuarios</div>

                <div class="panel-body">
                    <table id="example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>E-mail</th>
                                <th>Fecha de nacimiento</th>
                                <th>Direccion</th>
                                <th>Fecha de registro</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nombre</th>
                                <th>E-mail</th>
                                <th>Fecha de nacimiento</th>
                                <th>Direccion</th>
                                <th>Fecha de registro</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?php echo $user->name; ?></td>
                                <td><?php echo $user->email; ?></td>
                                <td><?php echo $user->birthdate; ?></td>
                                <td><?php
                                foreach ($directions as $direction){
                                    if($direction->user_id == $user->id){?>
                        <li>
                            <ol>
                                <?php echo $direction->direction; ?>
                            </ol>
                        </li>
                                    
                                    <?php
                                    }
                                }
                                ?></td>
                                <td><?php echo $user->created_at; ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
