create table public.tabela_calça
(
	id_calça serial not null
		constraint tabela_calça_pk
			primary key,
	cal_referencia integer,
	cal_tamanho integer,
	cal_composiçao varchar,
	cal_quantidade integer,
	cal_descriçao varchar,
	cal_cor varchar,
	cal_modelo char
);

alter table public.tabela_calça owner to postgres;

create unique index tabela_calça_id_calça_uindex
	on public.tabela_calça (id_calça);

create unique index tabela_calça_cal_referencia_uindex
	on public.tabela_calça (cal_referencia);

