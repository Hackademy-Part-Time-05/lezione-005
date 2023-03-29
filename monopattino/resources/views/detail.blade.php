<x-main> 
    <x-slot:title>
        Dettaglio {{$monopattino['name']}}
    </x-slot>

    <x-slot:script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
        </script> 
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
        <x-card :stringa="'ciao'"  :monopattino="$monopattino"/> 
    </div> 
    </div> 
</x-main>