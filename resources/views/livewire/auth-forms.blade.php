<div class="w-full h-screen flex relative">
    <div
        class="w-1/2 h-full bg-blue-black flex items-center justify-center text-white transition-transform duration-700 ease-in-out z-10"
        style="{{ $swapPositions ? 'transform: translateX(100%);' : '' }}">
        DIV BLUE
    </div>

    <div
        class="w-1/2 h-full bg-blue-white flex items-center justify-center text-white transition-transform duration-700 ease-in-out"
        style="{{ $swapPositions ? 'transform: translateX(-100%);' : '' }}">
        DIV GREEN
    </div>

    <button wire:click="togglePositions"> Trocar </button>
</div>