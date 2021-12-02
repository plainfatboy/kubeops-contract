package com.kubops.kubops;

import org.junit.jupiter.api.Test;
import org.springframework.boot.test.context.SpringBootTest;
import org.springframework.boot.test.mock.mockito.MockBean;
import static org.mockito.Mockito.when;

@SpringBootTest
class KubopsApplicationTests {

	@Test
	void contextLoads() {
	}

	@MockBean
	private SquareService service;

	@Test
	public void squareNumberShouldBeReturnedFromSquareService() throws Exception {
		when(service.square(9)).thenReturn(81);
	}

}
