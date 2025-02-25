<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Vizcontroller extends Component
{

    protected $listeners = ['sendVizCommand' => 'sendCommand'];

    public function sendCommand($vizcommand, $sceneid, $scenedata)
    {

        dd("aa");
        $data = [
            'engine' => config('viz.engine'),
            'port' => config('viz.port'),
            'sceneid' => $sceneid,
            'vizcommand' => $vizcommand,
            'scenedata' => "$scenedata};scenetitle=0"
        ];

        try {
            $response = Http::post(config('viz.apiUrl'), $data);

            if ($response->failed()) {
                $this->dispatchBrowserEvent('show-alert', ['type' => 'error', 'message' => 'API Error: ' . $response->body()]);
                return;
            }

            $this->dispatch('show-alert', ['type' => 'success', 'message' => 'Command sent successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('show-alert', ['type' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
        }
    }


    public function render()
    {
        return view('livewire.vizcontroller');
    }
}
