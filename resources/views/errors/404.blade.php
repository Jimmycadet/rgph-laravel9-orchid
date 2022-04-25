@extends('errors.error')

@section('title', __('DÉSOLÉ! PAGE NON TROUVÉE'))
@section('code', __('404'))
@section('code-image', __(asset('assets/images/404.svg')))

@section('message', __('La page que vous recherchez peut être supprimée, modifiée ou n\'existe pas.'))
