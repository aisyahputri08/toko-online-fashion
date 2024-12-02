namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // Cek apakah login valid
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Jika berhasil login, arahkan ke halaman utama
            return redirect()->intended('/home');
        } else {
            // Jika gagal login, kembali ke form login dengan pesan error
            return redirect()->route('login')->withErrors('Login gagal, periksa username dan password Anda.');
        }
    }
}
