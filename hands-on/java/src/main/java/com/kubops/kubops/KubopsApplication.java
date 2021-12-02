package com.kubops.kubops;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;
import org.springframework.web.bind.annotation.PathVariable;

@SpringBootApplication
@RestController
public class KubopsApplication {

	private final SquareService service;

	public KubopsApplication(SquareService service) {
		this.service = service;
	}

	public static void main(String[] args) {
		SpringApplication.run(KubopsApplication.class, args);
	}

	@RequestMapping("/")
	public String home() {
		return "Hello, this is Kubops's test app.";
	}

	@RequestMapping("/square/{number}")
	public String square(@PathVariable int number) {
		return "squear of " + number + " = " + service.square(number);
	}

}
