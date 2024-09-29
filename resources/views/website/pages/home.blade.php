@extends('website.layouts.app')

@section('pageTitle',__('website.home'))

@section('content')


            @include('website.pages.home_section.slider')
            @include('website.pages.home_section.projects')
            @include('website.pages.home_section.properties')
            @include('website.pages.home_section.cities')
            @include('website.pages.home_section.customers')




              
            

           

             

               

            




@endsection