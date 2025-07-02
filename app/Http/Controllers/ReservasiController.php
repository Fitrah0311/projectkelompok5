<php?
namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $data = Reservasi::all();
        return view('reservasi.index', compact('data'));
    }

    public function create()
    {
        return view('reservasi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pelanggan' => 'required',
            'layanan' => 'required',
            'tanggal' => 'required|date',
        ]);

        Reservasi::create($request->all());
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('reservasi.edit', compact('reservasi'));
    }

    public function update(Request $request, $id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Reservasi::findOrFail($id)->delete();
        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus!');
    }
}
