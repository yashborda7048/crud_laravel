<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <h1>Crud {{ $title }}</h1>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="{{ Route('home') }}">Home</a>
                </li>
                <li>
                    <a href="{{ Route('add') }}">Add</a>
                </li>
                <li>
                    <a href="{{ Route('edit', ['id' => '1']) }}">Update</a>
                </li>
                <li>
                    <a href="{{ Route('about')}}">About Us</a>
                </li>
            </ul>
        </div>
