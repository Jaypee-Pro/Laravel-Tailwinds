
{{-- to avail to add class to x-card we to add attribute in div --}}
{{-- $attributes->merge(['class'=> 'class value']) --}}
<div {{$attributes->merge(['class'=>'bg-gray-50 border border-gray-200 rounded p-6'])}}>
    {{$slot}}
</div>