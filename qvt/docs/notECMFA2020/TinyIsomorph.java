class A2B {
	
	class A {
		A a;
	}
	
	class B {
		B b;
	}

	A a;
	B b;
	
	void optimum() {
		// load a1, a2
		B aB1 = new B();
		B aB2 = new B();
		aB1.b = aB2;
		aB2.b = aB1;
		// save b1, b2
	}
	
	void naive_looped() {
		// load allA
		for (A anA : allA) {
			B aB = new B();
			aB.b = lookup(anA.a);
		}
		// save allB
	}
	
	void bad_looped() {
		Map<A,B> a2b = new Map<A,B>();
		// load a2b.keySet()
		for (A anA : a2b.keySet()) {
			B aB = new B();
			a2b.put(anA, aB);
			aB.b = a2b.get(anA.a);
		}
		// save a2b.values()
	}
	
	void ok_looped() {
		Map<A,B> a2b = new Map<A,B>();
		// load a2b.keySet()
		for (A anA : a2b.keySet()) {				// tree-pass
			B aB = new B();
			a2b.put(anA, aB);
		}
		for (A anA : a2b.keySet()) {				// graph-pass
			B aB = a2b.get(anA);
			aB.b = a2b.get(anA.a);
		}
		// save a2b.values()
	}
	
	void qvtc_looped() {
		// load allA
		for (A anA : allA) {
			B aB = new B();
			TA2B a2b = new TA2B();
			a2b.a = anA;			// anA.A2B = a2b;
			a2b.b = aB;				// aB.A2B = a2b;
			aB.b = anA.a.TA2B.b;
		}
		// save allB
	}
}
