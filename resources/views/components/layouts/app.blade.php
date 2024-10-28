<!DOCTYPE html>
<html lang="en">

<head>
    
    <livewire:Head />
    

</head>



<body class="leading-normal tracking-normal text-white gradient" style="font-family: 'Source Sans Pro', sans-serif;">

    <livewire:Navbar />

    @if(Route::is('home'))
        
    {{-- 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 --}}
    
        <livewire:Home />
        
    @elseif(Route::is('about'))
        
        <livewire:About />
        
    
    @elseif(Route::is('contact'))

        {{-- <livewire:RequestForm /> --}}
        @livewire('request-form')
        
        
    @endif
        
        
    <livewire:ScriptsFooter />
    <livewire:MainFooter /> 


</body>

</html>
