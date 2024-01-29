namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Attendance;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function index()
    {
        $today = date('Y-m-d');
        $count = Attendance::where('date', $today)
            ->where('status', 1)
            ->count();

        $year = request('year', Carbon::now()->year);
        $months = [];

        for ($m = 1; $m <= 12; $m++) {
            $month = Carbon::createFromDate($year, $m, 1);
            $monthName = $month->shortMonthName;
            array_push($months, $monthName);
        }

        $attendances = DB::table('attendances')->get();

        return view('attendance.index', ['attendances' => $attendances, 'count' => $count, 'months' => $months]);
    }
}