@extends('layouts.guest')

@section('content')
            
    <div class=search>
        <p>form search</p>
        
        <form action="/products" method="get" class=search>
            <label for="txtSearch">
                Kleding zoeken input
            </label>
            <input type="text" name="txtSearch" id="txtSearch" placeholder="Kleding zoeken">
            
            <label for="selectCategory">
                Categorie select
            </label>
            <select name="selectCategory" id="selectCategory">
                <option value="1">trui</option>
                <option value="2">t-shirt</option>
            </select>
            
            <label for="selectSize">
                Maat
            </label>
            <select name="selectSize" id="selectSize">
                <option value="1">S</option>
                <option value="2">M</option>
                <option value="3">L</option>
                <option value="4">XL</option>
            </select>
            
            <button type="submit" id="btnSearch">
                search
            </button>
        </form>
    </div>

@endsection