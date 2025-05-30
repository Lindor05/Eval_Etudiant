@extends('layouts.app')

@section('title', 'Tableau de bord')

@section('content')
<div class="row">
<div class="col-lg-4 col-6">
    <div class="small-box bg-info">
    <div class="inner">
        <h3>12</h3>
        <p>Étudiants</p>
    </div>
    <div class="icon">
        <i class="fas fa-user-graduate"></i>
    </div>
    <a href="{{ route('admin.etudiants.index') }}" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-6">
    <div class="small-box bg-warning">
    <div class="inner">
        <h3>5</h3>
        <p>Évaluations</p>
    </div>
    <div class="icon">
        <i class="fas fa-file-alt"></i>
    </div>
    <a href="{{ route('admin.evaluations.index') }}" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>

<div class="col-lg-4 col-6">
    <div class="small-box bg-success">
    <div class="inner">
        <h3>48</h3>
        <p>Notes</p>
    </div>
    <div class="icon">
        <i class="fas fa-pen"></i>
    </div>
    <a href="{{ route('admin.notes.index') }}" class="small-box-footer">Plus d'infos <i class="fas fa-arrow-circle-right"></i></a>
    </div>
</div>
</div>
@endsection
