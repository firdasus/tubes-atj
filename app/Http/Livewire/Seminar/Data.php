<?php

namespace App\Http\Livewire\Seminar;

use Livewire\Component;
use App\Models\Upcoming\Event;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    protected $listeners=['type'];
    public $events, $event;
    public $perPage = 3;
    public $page = 1;
    public $numbering;

    public function mount()
    {

    }

    public function render()
    {
        $this->filterData();

        return view('livewire.seminar.data', [
            'events' => $this->events
        ]);
    }

    private function filterData()
    {
        $this->events = Event::where('event_type', 3)
            ->orderBy('event_date', 'desc')
            ->skip(($this->page - 1) * $this->perPage)
            ->take($this->perPage)
            ->get();

            $this->numbering = ($this->page - 1) * $this->perPage + 1;
                }
                public function Selanjutnya()
            {
                if ($this->events->count() == $this->perPage) {
                    $this->page++;
                }
            }

            public function Sebelumnya()
            {
                if ($this->page > 1) {
                    $this->page--;
                }
            }
}
