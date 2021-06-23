@extends('welcome')

@section('title', __('Forbidden'))
@section('code', '403')
@section('content', __($exception->getMessage() ?: 'Forbidden'))
