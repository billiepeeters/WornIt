@extends('layouts.guest')

@section('content')
            
    <div class=search>
        <p>form search</p>
        
        <form action="/overview" method="get" class=search>
            
            <label for="selectCategory">
                Categorie:
            </label>
            <select name="selectCategory" id="selectCategory">
                <option value="1">trui</option>
                <option value="2">t-shirt</option>
            </select>
            
            <label for="selectSize">
                Maat:
            </label>
            <select name="selectSize" id="selectSize">
                <option value="1">S</option>
                <option value="2">M</option>
                <option value="3">L</option>
                <option value="4">XL</option>
            </select>
            
            <label for="brand">Merk</label>
            <select name="selectBrand" id="selectBrand">
                <option value="weAreImd">weAreImd</option>
            </select>
            
            <button type="submit" id="btnSearch">
                search
            </button>
        </form>
    </div>

@endsection