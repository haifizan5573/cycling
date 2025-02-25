<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Apops extends Component
{

    public $laptogo = "15 LAPS TO GO";


    public function setText($text)
    {

        $this->laptogo = $text;

    }

    public function render()
    {
        return view('livewire.apops');
    }

    // public function triggerViz($vizcommand, $scenetype)
    // {
    //     $scenedata="title=".$this->laptogo;
    //     $scenes = config('scene.scenes');
    //    //dd( $scenes[$scenetype]);

    //     $this->dispatch('sendVizCommand', vizcommand: $vizcommand, sceneid: $scenes[$scenetype], scenedata: $scenedata);
    // }
    public function triggerViz($vizcommand, $scenetype)
    {
        $scenedata = "title=" . $this->laptogo;
        $scenes = config('scene.scenes');
        $this->sendCommand($vizcommand, $scenes[$scenetype] ?? null, $scenedata);


    }


    public function sendCommand($vizcommand, $sceneid, $scenedata)
    {

        $data = [
            'engine' => config('viz.engine'),
            'port' => config('viz.port'),
            'sceneid' => $sceneid,
            'vizcommand' => $vizcommand,
            'scenedata' => "$scenedata;scenetitle=0"
        ];

        try {
            $response = Http::post(config('viz.apiUrl'), $data);

            if ($response->failed()) {
                dd($response->body());
                //$this->dispatchBrowserEvent('show-alert', ['type' => 'error', 'message' => 'API Error: ' . $response->body()]);
                return;
            }

            $this->dispatch('show-alert', ['type' => 'success', 'message' => 'Command sent successfully!']);
        } catch (\Exception $e) {
            $this->dispatch('show-alert', ['type' => 'error', 'message' => 'Error: ' . $e->getMessage()]);
        }
    }

}
