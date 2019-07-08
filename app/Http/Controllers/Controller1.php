namespace App\Http\Controllers;


class Controller1 extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}