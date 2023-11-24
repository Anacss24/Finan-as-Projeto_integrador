
<x-app-layout>
    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-yellow overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black dark:text-black text-lg">
            {{ "Hello, " . Auth::user()->name }}<br>
            {{ __("Bem-Vindo!") }}<br><br>
                <a type="button" style="color: black; border:2px solid white; border-radius:10px; padding:20px; font-weight:600" href="http://localhost/conversor/conversor.php">Conversor de Moedas</a>
            </div>
            
</div>
      
    
      
        <div style="display: flex;">
        <img style="width: 50px; height:50px; margin-right:10px; margin-top:30px;" src="/img/arrow-up-circle.png" alt=""><p style="color:white; margin-top:30px; font-size:20px;">Receitas <br><strong>$500,00</strong>  </p>
        
        <img style="width: 50px; height:50px; margin-right:10px; margin-top:30px;margin-left:100px;" src="/img/arrow-up-circle (2) 1.png" alt=""><p style="color:white;margin-top:30px; font-size:20px;">Despesas <br><strong>$400,00</strong> 
    </p>
        </div>
        
    </div>
    
</div>

</x-app-layout>
 
</div>
</div>

