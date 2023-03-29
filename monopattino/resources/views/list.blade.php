<x-main> 
    <x-slot:title>
        Lista Monopattini
    </x-slot>
    <div class="container px-5 my-5">
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-8 col-xl-6">
            <div class="text-center">
                <h2 class="fw-bolder">Lista Monopattini</h2>
            </div>
        </div>
    </div>
    <div class="row gx-5">
        @foreach ($monopattini as $monopattino) 
            <x-card :stringa="'ciao'"  :$monopattino/>  
        @endforeach 
    </div> 
    </div> 
</x-main>