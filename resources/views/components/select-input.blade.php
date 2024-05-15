@props(['disabled' => false, 'options' => [], 'selected' => null, 'default' => null])
 
<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}>
    <option value="">Pilih Pekerjaan</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    
</select>