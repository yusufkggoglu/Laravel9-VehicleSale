@extends('layouts.home')

@section('title', $setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')

@endsection
