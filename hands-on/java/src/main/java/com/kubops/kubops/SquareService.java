package com.kubops.kubops;

import org.springframework.stereotype.Service;

@Service
public class SquareService {
	public int square(int number) {
		return number * number;
	}
}