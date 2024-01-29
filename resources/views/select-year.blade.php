<button id="yearButton" class="year-button">Current Year</button>
<div id="yearDropdown" class="year-dropdown">
    <select id="yearSelect" class="year-select">
        @php
        $currentYear = date('Y');
        $maxYear = 2060;

        for ($year = $currentYear; $year <= $maxYear; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
        @endphp
    </select>
</div>

<script src="{{ asset('js/select-year.js') }}"></script>