public function index(Request $request) {
		try {
			$query = new AssessmentCategory();
			if ($request->q) {
				$query = $query->where('category_en', 'LIKE', "%{$request->q}%");
				$query = $query->orWhere('category_bn', 'LIKE', "%{$request->q}%");
			}
			$rows = $query->paginate(30);
			return view('backend.assesmentcategory.index', compact('rows'));
		} catch (Exception $e) {
			echo 'Caught exception: ', $e->getMessage(), "\n";
		}
	}
