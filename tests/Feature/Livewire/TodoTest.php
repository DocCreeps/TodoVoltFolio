<?php

use Livewire\Volt\Volt;

it('can render todo', function () {
    $component = Volt::test('todo');

    $component
        ->assertSet('content', '')
        ->assertSee('Add')
        ->set('content', fake()->text(40))
        ->call('addTodo')
        ->assertSet('content', '')
        ->assertSet('count', 1);
});
