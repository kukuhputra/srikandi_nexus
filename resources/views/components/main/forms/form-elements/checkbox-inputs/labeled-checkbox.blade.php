<div class="flex flex-wrap items-center gap-6 sm:gap-8">
    <x-ui.field orientation="horizontal" class="w-auto gap-2.5">
        <x-ui.checkbox id="checkbox-default" />
        <x-ui.label for="checkbox-default" class="cursor-pointer text-sm font-medium text-gray-700">Default</x-ui.label>
    </x-ui.field>

    <x-ui.field orientation="horizontal" class="w-auto gap-2.5">
        <x-ui.checkbox id="checkbox-checked" :checked="true" />
        <x-ui.label for="checkbox-checked" class="cursor-pointer text-sm font-medium text-gray-700">Checked</x-ui.label>
    </x-ui.field>

    <x-ui.field orientation="horizontal" class="w-auto gap-2.5">
        <x-ui.checkbox id="checkbox-disabled" :checked="true" disabled />
        <x-ui.label for="checkbox-disabled" class="cursor-not-allowed text-sm font-medium text-gray-400">Disabled</x-ui.label>
    </x-ui.field>
</div>
